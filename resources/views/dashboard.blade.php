<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}  <div class="time"> <?php
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
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="income">
                    <strong>&nbsp; Add your income and expenses</strong>
                    <form>
                        @csrf
                        <label for="category"></label>
                        <select name="category" id="category" required>
                            <option value="" disabled selected>Choose a category</option>
                            <option value="income" disabled>->Income<-</option>
                            <option value="salary">Salary</option>
                            <option value="investments">Investments</option>
                            <option value="gifts">Gifts</option>
                            <option value="allowance">Allowance/Pocket Money</option>
                            <option value="government payments">Government Payments</option>
                            <option value="expenses" disabled>->Expenses<-</option>
                            <option value="housing">Housing</option>
                            <option value="trasportation">Transportation</option>
                            <option value="food">Food</option>
                            <option value="utilities">Utilities</option>
                            <option value="insurance ">Insurance </option>
                            <option value="medical & healthcare">Medical & Healthcare</option>
                            <option value="savings">Saving, Investing, & Debt Payments</option>
                            <option value="personal spending">Personal Spending</option>
                            <option value="recreation & entertainment">Recreation & Entertainment</option>
                            <option value="miscellaneous">Miscellaneous</option>
                        </select>
                        <input type="number" placeholder="income/expenses" name="income/expenses" required>
                        <input type="date" name="date" required>
                        <input type="submit" value="&nbsp;Enter&nbsp;" class="incomesub">

                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
