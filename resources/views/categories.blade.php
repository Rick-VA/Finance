<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Categories') }}  <div class="time"> <?php
                /* This sets the $time variable to the current hour in the 24 hour clock format */
                $time = date("H");
                /* Set the $timezone variable to become the current timezone */
                $timezone = date("e");
                /* If the time is less than 1200 hours, show good morning */
                if ($time < "12") {
                    echo "Good morning";
                } else
                    /* If the time is grater than or equal to 1200 hours, but less than 1700 hours, so good afternoon */
                    if ($time >= "12" && $time < "17") {
                        echo "Good afternoon";
                    } else
                        /* Should the time be between or equal to 1700 and 1900 hours, show good evening */
                        if ($time >= "17" && $time < "19") {
                            echo "Good evening";
                        } else
                            /* Finally, show good night if the time is greater than or equal to 1900 hours */
                            if ($time >= "19") {
                                echo "Good night";
                            }
                ?>&nbsp;{{ Auth::user()->name }}</div>
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg pb-3">
                <div class="category-body">
                    <strong>&nbsp;add a new category</strong>
                    <form action="/categories" method="POST">
                        @csrf
                        <input type="text" placeholder="Name" name="name" required>
                        <input type="submit" value="&nbsp;Enter&nbsp;" class="category">
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="py-123">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 ">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg pb-3">
                <div class="category-body">

                </div>

                <table>
                    <tr>
                        <th>You're categories</th>
                    </tr>

                    @foreach(Auth::user()->categories as $category)
                        <tr >
                            <td class="table-cat">{{$category->name}}</td>
                        </tr>
                               <td><form action="{{route('categories.destroy',$category->id)}}" method="post">@csrf @method('delete')<input type="submit" value="Delete" class="deletebutton"></form></td>

                    @endforeach
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
