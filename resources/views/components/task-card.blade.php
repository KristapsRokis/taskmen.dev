@props(['task'])

    <ul class="uzdevums" onclick="window.location='/task/{{$task->id}}';">
        <li class="title">
            {{$task->title}}
        </li>
        <li class="desc">
            {{$task->description}}
        </li>
        <li class="due">
            {{$task->duedate}}
        </li>
        <li class="priority">
            @php
            $priority = $task->priority
            @endphp
            <a href="/?tagPriority={{$priority}}">{{$priority}}</a>
        </li>
        <li class="status">
            @php
            $status = $task->status
            @endphp
            <a href="/?tagStatus={{$status}}">{{$status}}</a>
        </li>
    </ul>
