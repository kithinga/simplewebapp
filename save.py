@api.constrains('check_in', 'check_out', 'employee_id', 'metrovehicle_id')
    def _check_validity(self):
        """ Verifies the validity of the attendance record compared to the others from the same vehicle/employee.
            For the same employee/ vehicle we must have :
                * maximum 1 "open" attendance record (without check_out)
                * no overlapping time slices with previous employee/vehicle records
        """
        for attendance in self:
            # we take the latest attendance before our check_in time and check it doesn't overlap with ours
            last_attendance_before_check_in = self.env['hr.attendance'].search([
                ('metrovehicle_id', '=', attendance.metrovehicle_id.id),
                ('check_in', '<=', attendance.check_in),
                ('id', '!=', attendance.id),
            ], order='check_in desc', limit=1)
            if last_attendance_before_check_in and last_attendance_before_check_in.check_out and\
                    last_attendance_before_check_in.check_out > attendance.check_in:
                raise exceptions.ValidationError(_(
                    "Cannot schedule for %(vehicle_name)s, the vehicle is already scheduled %(datetime)s") % {
                                                     'vehicle_name': attendance.metrovehicle_id.metrovehicle_id,
                                                     'datetime': format_datetime(self.env, attendance.check_in,
                                                                                 dt_format=False),
                                                 })

            if not attendance.check_out:
                # if our attendance is "open" (no check_out), we verify there is no other "open" attendance
                no_check_out_attendances = self.env['hr.attendance'].search([
                    ('metrovehicle_id', '=', attendance.metrovehicle_id.id),
                    ('check_out', '=', False),
                    ('id', '!=', attendance.id),
                ], order='check_in desc', limit=1)
                if no_check_out_attendances:
                    raise exceptions.ValidationError(_(
                        "Cannot schedule for %(vehicle_name)s, the vehicle hasn't checked out since %(datetime)s") % {
                                                         'vehicle_name': attendance.metrovehicle_id.metrovehicle_id,
                                                         'datetime': format_datetime(self.env,
                                                                                     no_check_out_attendances.check_in,
                                                                                     dt_format=False),
                                                     })
            else:
                # we verify that the latest attendance with check_in time before our check_out time
                # is the same as the one before our check_in time computed before, otherwise it overlaps
                last_attendance_before_check_out = self.env['hr.attendance'].search([
                    ('metrovehicle_id', '=', attendance.metrovehicle_id.id),
                    ('check_in', '<', attendance.check_out),
                    ('id', '!=', attendance.id),
                ], order='check_in desc', limit=1)
                if last_attendance_before_check_out and last_attendance_before_check_in != last_attendance_before_check_out:
                    raise exceptions.ValidationError(_(
                        "Cannot create new schedule record for %(vehicle_name)s, the vehicle was already checked in on %(datetime)s") % {
                                                         'vehicle_name': attendance.metrovehicle_id.id,
                                                         'datetime': format_datetime(self.env,
                                                                                     last_attendance_before_check_out.check_in,
                                                                                     dt_format=False),
                                                     })

    @api.returns('self', lambda value: value.id)
    def copy(self):
        raise exceptions.UserError(_('You cannot duplicate an attendance.'))