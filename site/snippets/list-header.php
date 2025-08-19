<?php if ($slots->isSortable()) : ?>
    <ul class="list-topbar-header">
        <li class="topbar-label" data-item="project">
            <span class="text-label weight-500">Name</span>
            <svg viewBox="0 0 10 13" xmlns="http://www.w3.org/2000/svg">
                <path d="M9 1L5 11L1 1" />
            </svg>
        </li>
        <li class="topbar-label" data-item="year">
            <span class="text-label weight-500">Year</span>
            <svg viewBox="0 0 10 13" xmlns="http://www.w3.org/2000/svg">
                <path d="M9 1L5 11L1 1" />
            </svg>
        </li>
        <li class="topbar-label" data-item="client">
            <span class="text-label weight-500">Client</span>
            <svg viewBox="0 0 10 13" xmlns="http://www.w3.org/2000/svg">
                <path d="M9 1L5 11L1 1" />
            </svg>
        </li>
        <li class="topbar-label" data-item="location">
            <span class="text-label weight-500">Location</span>
            <svg viewBox="0 0 10 13" xmlns="http://www.w3.org/2000/svg">
                <path d="M9 1L5 11L1 1" />
            </svg>
        </li>
        <li class="topbar-label" data-item="category">
            <span class="text-label weight-500">Category</span>
            <svg viewBox="0 0 10 13" xmlns="http://www.w3.org/2000/svg">
                <path d="M9 1L5 11L1 1" />
            </svg>
        </li>
        <li class="topbar-label" data-item="stage">
            <span class="text-label weight-500">Stage</span>
            <svg viewBox="0 0 10 13" xmlns="http://www.w3.org/2000/svg">
                <path d="M9 1L5 11L1 1" />
            </svg>
        </li>
    </ul>
<?php else : ?>
    <ul class="list-topbar-header">
        <li class="topbar-label" data-item="project">
            <span class="text-label weight-500">Name</span>
        </li>
        <li class="topbar-label" data-item="year">
            <span class="text-label weight-500">Year</span>
        </li>
        <li class="topbar-label" data-item="client">
            <span class="text-label weight-500">Client</span>
        </li>
        <li class="topbar-label" data-item="location">
            <span class="text-label weight-500">Location</span>
        </li>
        <li class="topbar-label" data-item="category">
            <span class="text-label weight-500">Category</span>
        </li>
        <li class="topbar-label" data-item="stage">
            <span class="text-label weight-500">Stage</span>
        </li>
    </ul>
<?php endif ?>