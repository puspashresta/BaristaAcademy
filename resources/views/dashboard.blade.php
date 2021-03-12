<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard for ADMIN') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <ul>
                        <li>
                    <a href="add_course">Add Course</a></li>
                    <li><a href="add_team">Add Team</a></li>
                    <li><a href="add_about">Add About Content</a></li>
                    <li><a href="view_message">View Message</a></li>
                    <li><a href="view_register">View Application</a></li>
                    <li><a href="add_menu">Add Menu</a></li><li><a href="add_services">Add Services</a></li><li><a href="add_event">Add Event</a></li>
                </ul>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
 