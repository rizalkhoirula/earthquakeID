<div class="deznav">
    <div class="deznav-scroll">
        <ul class="metismenu" id="menu">

            <li><a class="ai-icon @if(request()->is('dashboard')) mm-active @endif" href="/dashboard" aria-expanded="false">
                    <i class="flaticon-381-networking"></i>
                    <span class="nav-text">Dashboard</span>
                </a>

            </li>
            <li><a href="/gempa" class="ai-icon @if(request()->is('data-siswa')) mm-active @endif" aria-expanded="false">
                    <i class="flaticon-381-file"></i>
                    <span class="nav-text">Data Gempa</span>
                </a>
            </li>

            <li><a href="/visualisasi-gempa" class="ai-icon @if(request()->is('visualisasi-gempa')) mm-active @endif" aria-expanded="false">
                    <i class="flaticon-381-file"></i>
                    <span class="nav-text">Visualisasi Gempa</span>
                </a>
            </li>
        </ul>


    </div>
</div>
