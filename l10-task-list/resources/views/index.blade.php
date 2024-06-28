<h1>
    This ist the task challange for beginners
</h1>

<div>
    @if(count($tasks))
    <div>ther are some Tasks</div>
    @else
    <div>
        <div>
            No tasks found. You should add some tasks in your database
        </div>
        @endif
    </div>
</div>