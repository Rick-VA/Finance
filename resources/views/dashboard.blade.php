<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}  <div class="time"> <?php
    /* This sets the $time variable to the current hour in the 24 hour clock format */
    $time = date("H");
    /* Set the $timezone variable to become the current timezone */
    $timezone = date("e");
    /* If the time is less than 1200 hours, show good morning */
    if ($time < "11") {
        echo "Good morning";
    } else
    /* If the time is grater than or equal to 1200 hours, but less than 1700 hours, so good afternoon */
    if ($time >= "11" && $time < "17") {
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
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="income">
                    <strong>&nbsp; Add your income and expenses</strong>
                    <form action="/new" method="post">
                        @csrf
                        <label name="category" for="category"></label>
                        <input type="text" placeholder="name" name="name" required>
                        <select name="category" id="category" required>
                            <option value="" disabled selected>Choose a category</option>
                            @foreach(Auth::user()->categories as $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                        </select>
                        <input type="number" placeholder="income/expenses" name="income" id="income" required>
                        <input type="date" name="date" required>
                        <input type="submit" value="&nbsp;Save&nbsp;" class="incomesub">
                        <a href="/categories" class="categories">&nbsp;Create Categories&nbsp;</a>

                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
