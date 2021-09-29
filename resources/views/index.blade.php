<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="widtd=device-widtd, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@lang('xero-payroll-au-translations::xero-payroll-au.heading')</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.11/tailwind.min.css">

</head>
<body class="font-sans antialiased">
<div>
    <!-- Page Content -->
    <main>
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
            <div class="font-semibold text-xl text-gray-800 leading-tight">@lang('xero-payroll-au-translations::xero-payroll-au.heading')</div>

            <div class="mt-2 flex">

                <a href="{{ route('xero_payroll.sync') }}"
                   class="text-blue-400 underline">@lang('xero-payroll-au-translations::xero-payroll-au.buttons.sync')</a>

                <br>

                @dump($configurations);


                <form action="{{ route('xero_payroll.update') }}" method="POST">
                    @csrf
                <table class="table-auto">
                    <tbody>
                    <tr>
                        <td>{{ $configurations->where('key', 'xero_default_payroll_calendar')->pluck('name') }}</td>
                        <td>
                            <select name="xero_default_payroll_calendar" id="xero_default_payroll_calendar">
                                @foreach($configurations->where('key', 'xero_default_payroll_calendar')->pluck('value')->toArray() as $option)
                                    <option value="">value</option>
                                    @endforeach
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>{{ $configurations->where('key', 'xero_default_time_and_a_half')->pluck('name') }}</td>
                        <td>
                            <select name="xero_default_time_and_a_half" id="xero_default_time_and_a_half">
                                @foreach($configurations->where('key', 'xero_default_time_and_a_half')->pluck('value')->toArray() as $option)
                                    <option value="">value</option>
                                @endforeach
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>{{ $configurations->where('key', 'xero_default_double_time')->pluck('name') }}</td>
                        <td>
                            <select name="xero_default_double_time" id="xero_default_double_time">
                                @foreach($configurations->where('key', 'xero_default_double_time')->pluck('value')->toArray() as $option)
                                    <option value="">value</option>
                                @endforeach
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                    </tr>
                    </tbody>
                </table>
                </form>

            </div>
        </div>
    </main>

</div>

</body>
</html>
