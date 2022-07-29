<li class="nav-item">
    <a href="{{ route('mahasiswas.index') }}"
       class="nav-link {{ Request::is('mahasiswas*') ? 'active' : '' }}">
        <p>Mahasiswas</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('dosens.index') }}"
       class="nav-link {{ Request::is('dosens*') ? 'active' : '' }}">
        <p>Dosens</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('mataKuliahs.index') }}"
       class="nav-link {{ Request::is('mataKuliahs*') ? 'active' : '' }}">
        <p>Mata Kuliahs</p>
    </a>
</li>


