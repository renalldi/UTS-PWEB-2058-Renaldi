@extends('layouts.app')

@section('title', 'Contact')

@section('content')
<div class="flex justify-center">
    <div class="w-full max-w-4xl bg-white rounded-lg shadow-md p-6">
        <h2 class="text-2xl font-semibold text-center mb-6">Contact Information</h2>
        <table class="min-w-full bg-gray-100 table-auto text-center border-collapse border border-gray-300">
            <thead>
                <tr class="bg-gray-200">
                    <th class="px-4 py-2 border border-gray-300">No</th>
                    <th class="px-4 py-2 border border-gray-300">Name</th>
                    <th class="px-4 py-2 border border-gray-300">Role</th>
                    <th class="px-4 py-2 border border-gray-300">Email</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $contacts = [
                        ['name' => 'John Doe', 'role' => 'Student', 'email' => 'johndoe@student.com'],
                        ['name' => 'Jane Smith', 'role' => 'Employee', 'email' => 'janesmith@company.com'],
                        ['name' => 'Michael Johnson', 'role' => 'Student', 'email' => 'michaelj@student.com'],
                        ['name' => 'Emily Davis', 'role' => 'Professor', 'email' => 'emilyd@university.com'],
                        ['name' => 'Christopher Brown', 'role' => 'Student', 'email' => 'chrisb@student.edu'],
                        ['name' => 'Natalie Wilson', 'role' => 'Employee', 'email' => 'nataliew@company.com'],
                        ['name' => 'James Williams', 'role' => 'Professor', 'email' => 'jamesw@university.edu'],
                        ['name' => 'Sophia Miller', 'role' => 'Student', 'email' => 'sophiam@student.edu'],
                        ['name' => 'Oliver Anderson', 'role' => 'Employee', 'email' => 'olivera@company.com'],
                        ['name' => 'Isabella Taylor', 'role' => 'Professor', 'email' => 'isabellat@university.edu'],
                    ];
                @endphp

                @foreach($contacts as $index => $contact)
                    <tr>
                        <td class="px-4 py-2 border border-gray-300">{{ $index + 1 }}</td>
                        <td class="px-4 py-2 border border-gray-300">{{ $contact['name'] }}</td>
                        <td class="px-4 py-2 border border-gray-300">{{ $contact['role'] }}</td>
                        <td class="px-4 py-2 border border-gray-300">{{ $contact['email'] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
