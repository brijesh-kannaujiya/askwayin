@extends('master')

@section('content')
<div
    class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">

    <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
        <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">

        </div>

        <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
            <div class="grid grid-cols-1 md:grid-cols-2">
                <div class="p-6">
                    <div class="flex items-center">
                        <img class="telr"
                            src="https://telr.com/wp-content/uploads/2017/10/Telr-logo-green-rgb-2000w.png" alt="">
                    </div>
                </div>

                <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">

                    <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                        {{-- <form action="#"> --}}

                            <a href="{{url('user/dashboard')}}">
                                <button type="submit" class="btn btn-danger btn-lg btn-block">Cancelled</button>
                            </a>
                            {{--
                        </form> --}}
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection