<?php if ($slots->isSortable()) : ?>
    <ul class="list-topbar-header">
        <li class="topbar-label text-label weight-400" data-item="project">
            <span class="link">Name</span>
            <svg viewBox="0 0 10 13" xmlns="http://www.w3.org/2000/svg">
                <path d="M9 1L5 11L1 1" />
            </svg>
        </li>
        <li class="topbar-label text-label weight-400" data-item="year">
            <span class="link">Year</span>
            <svg viewBox="0 0 10 13" xmlns="http://www.w3.org/2000/svg">
                <path d="M9 1L5 11L1 1" />
            </svg>
        </li>
        <li class="topbar-label text-label weight-400" data-item="client">
            <span class="link">Client</span>
            <svg viewBox="0 0 10 13" xmlns="http://www.w3.org/2000/svg">
                <path d="M9 1L5 11L1 1" />
            </svg>
        </li>
        <li class="topbar-label text-label weight-400" data-item="location">
            <span class="link">Location</span>
            <svg viewBox="0 0 10 13" xmlns="http://www.w3.org/2000/svg">
                <path d="M9 1L5 11L1 1" />
            </svg>
        </li>
        <li class="topbar-label text-label weight-400" data-item="category">
            <span class="link">Category</span>
            <svg viewBox="0 0 10 13" xmlns="http://www.w3.org/2000/svg">
                <path d="M9 1L5 11L1 1" />
            </svg>
        </li>
        <li class="topbar-label text-label weight-400" data-item="status">
            <span class="link">Status</span>
            <svg viewBox="0 0 10 13" xmlns="http://www.w3.org/2000/svg">
                <path d="M9 1L5 11L1 1" />
            </svg>
        </li>
    </ul>
<?php else : ?>
    <ul class="list-topbar-header">
        <li class="topbar-label text-label weight-400" data-item="project">
            <span class="link">Name</span>
        </li>
        <li class="topbar-label text-label weight-400" data-item="year">
            <span class="link">Year</span>
        </li>
        <li class="topbar-label text-label weight-400" data-item="client">
            <span class="link">Client</span>
        </li>
        <li class="topbar-label text-label weight-400" data-item="location">
            <span class="link">Location</span>
        </li>
        <li class="topbar-label text-label weight-400" data-item="category">
            <span class="link">Category</span>
        </li>
        <li class="topbar-label text-label weight-400" data-item="status">
            <span class="link">Status</span>
        </li>
    </ul>
<?php endif ?>