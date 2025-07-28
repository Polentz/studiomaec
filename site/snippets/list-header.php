<?php if ($slots->isSortable()) : ?>
    <ul class="list-topbar-header">
        <li class="topbar-label text-label weight-500" data-item="project">
            <span class="text">Name</span>
            <svg viewBox="0 0 10 13" xmlns="http://www.w3.org/2000/svg">
                <path d="M9 1L5 11L1 1" />
            </svg>
        </li>
        <li class="topbar-label text-label weight-500" data-item="year">
            <span class="text">Year</span>
            <svg viewBox="0 0 10 13" xmlns="http://www.w3.org/2000/svg">
                <path d="M9 1L5 11L1 1" />
            </svg>
        </li>
        <li class="topbar-label text-label weight-500" data-item="client">
            <span class="text">Client</span>
            <svg viewBox="0 0 10 13" xmlns="http://www.w3.org/2000/svg">
                <path d="M9 1L5 11L1 1" />
            </svg>
        </li>
        <li class="topbar-label text-label weight-500" data-item="location">
            <span class="text">Location</span>
            <svg viewBox="0 0 10 13" xmlns="http://www.w3.org/2000/svg">
                <path d="M9 1L5 11L1 1" />
            </svg>
        </li>
        <li class="topbar-label text-label weight-500" data-item="category">
            <span class="text">Category</span>
            <svg viewBox="0 0 10 13" xmlns="http://www.w3.org/2000/svg">
                <path d="M9 1L5 11L1 1" />
            </svg>
        </li>
        <li class="topbar-label text-label weight-500" data-item="stage">
            <span class="text">Stage</span>
            <svg viewBox="0 0 10 13" xmlns="http://www.w3.org/2000/svg">
                <path d="M9 1L5 11L1 1" />
            </svg>
        </li>
    </ul>
<?php else : ?>
    <ul class="list-topbar-header">
        <li class="topbar-label text-label weight-500" data-item="project">
            <span class="text-label">Name</span>
        </li>
        <li class="topbar-label text-label weight-500" data-item="year">
            <span class="text-label">Year</span>
        </li>
        <li class="topbar-label text-label weight-500" data-item="client">
            <span class="text-label">Client</span>
        </li>
        <li class="topbar-label text-label weight-500" data-item="location">
            <span class="text-label">Location</span>
        </li>
        <li class="topbar-label text-label weight-500" data-item="category">
            <span class="text-label">Category</span>
        </li>
        <li class="topbar-label text-label weight-500" data-item="stage">
            <span class="text-label">Stage</span>
        </li>
    </ul>
<?php endif ?>