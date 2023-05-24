<table>
    <thead>
        <tr>
            <th>
                #
            </th>
            <th>
                ID
            </th>
            <th>
                Company Name
            </th>
            <th>
                Contact Person
            </th>
            <th>
                Address
            </th>
            <th>
                Phone
            </th>
            <th>
                Email
            </th>
            <th>
                Password
            </th>
            <th>
                Facebook
            </th>
            <th>
                Instagram
            </th>
            <th>
                Website
            </th>
            <th>
                Other
            </th>
            <th>
                Status
            </th>
        </tr>
    </thead>
    <tbody>
        @foreach ($companies as $key => $company)
            <tr>
                <td>
                    {{ $key + 1 }}
                </td>

                <td>
                    {{ $company->account_id ?? '' }}
                </td>

                <td>
                    {{ $company->company_name ?? '' }}
                </td>

                <td>
                    {{ $company->name ?? '' }}
                </td>

                <td>
                    {{ $company->address ?? '' }}
                </td>

                <td>
                    {{ $company->phone ?? '' }}
                </td>

                <td>
                    {{ $company->email ?? '' }}
                </td>

                <td>
                    {{ $company->plain_password ?? '' }}
                </td>

                <td>
                    {{ $company->facebook_link ?? '' }}
                </td>

                <td>
                    {{ $company->instagram_link ?? '' }}
                </td>

                <td>
                    {{ $company->website ?? '' }}
                </td>

                <td>
                    {{ $company->other ?? '' }}
                </td>

                <td>
                    {{ $company->user->is_active }}
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
