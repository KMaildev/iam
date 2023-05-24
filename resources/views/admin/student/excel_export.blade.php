<table>
    <thead>
        <tr>
            <th>
                Company Name
            </th>

            <th>
                First Select Date
            </th>

            <th>
                Second Select Date
            </th>

            <th>
                Third Select Date
            </th>

            <th>
                Name
            </th>

            <th>
                Date of Birth
            </th>

            <th>
                Age
            </th>

            <th>
                Gender
            </th>

            <th>
                Height
            </th>

            <th>
                Weight
            </th>

            <th>
                Japanese Level
            </th>

            <th>
                Education
            </th>

            <th>
                Foreign Experience
            </th>

            <th>
                Other Qualification
            </th>

            <th>
                Marital Status
            </th>

            <th>
                Blood Type
            </th>

            <th>
                Wearing Glasses/ Not
            </th>

            <th>
                Birth Place
            </th>

            <th>
                Nationality
            </th>

            <th>
                Religion
            </th>
        </tr>
    </thead>
    <tbody>
        @foreach ($users as $user)
            <tr>
                <td>
                    {{ $user->companies->company_name ?? '' }}
                </td>

                <td>
                    {{ $user->first_select_date }}
                </td>

                <td>
                    {{ $user->second_select_date }}
                </td>

                <td>
                    {{ $user->third_select_date }}
                </td>

                <td>
                    {{ $user->name }}
                </td>

                <td>
                    {{ $user->date_of_birth }}
                </td>

                <td>
                    {{ $user->age }}
                </td>

                <td>
                    {{ $user->gender }}
                </td>

                <td>
                    {{ $user->height }}
                </td>

                <td>
                    {{ $user->weight }}
                </td>

                <td>
                    {{ $user->language }}
                </td>

                <td>
                    {{ $user->education }}
                </td>

                <td>
                    {{ $user->foreign_experience }}
                </td>

                <td>
                    {{ $user->other_qualification }}
                </td>

                <td>
                    {{ $user->marital_status }}
                </td>

                <td>
                    {{ $user->blood_type }}
                </td>

                <td>
                    {{ $user->wearing_glasses_or_not }}
                </td>

                <td>
                    {{ $user->birth_place }}
                </td>

                <td>
                    {{ $user->nationality }}
                </td>

                <td>
                    {{ $user->religion }}
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
