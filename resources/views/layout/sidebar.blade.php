<nav class="sidebar">
    <div class="sidebar-header">
        <a href="#" class="sidebar-brand">
            Noble<span>UI</span>
        </a>
        <div class="sidebar-toggler not-active">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    <div class="sidebar-body">
        <ul class="nav">
            <li class="nav-item nav-category">Main</li>
            <li class="nav-item {{ active_class(['/']) }}">
                <a href="{{ url('/') }}" class="nav-link">
                    <i class="link-icon" data-feather="box"></i>
                    <span class="link-title">Anasayfa</span>
                </a>
            </li>
            <li class="nav-item {{ active_class(['yemek/*']) }}">
                <a class="nav-link" data-bs-toggle="collapse" href="#yemek" role="button"
                   aria-expanded="{{ is_active_route(['yemek/*']) }}" aria-controls="email">
                    <i class="link-icon" data-feather="coffee"></i>
                    <span class="link-title">Yemek</span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                </a>
                <div class="collapse {{ show_class(['yemek/*']) }}" id="yemek">
                    <ul class="nav sub-menu">
                        <li class="nav-item">
                            <a href="{{ url('/yemekler') }}"
                               class="nav-link {{ active_class(['yemekler']) }}">Yemekler</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/yemekekle') }}" class="nav-link {{ active_class(['yemekekle']) }}">Yemek
                                Ekle</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item {{ active_class(['otobus/*']) }}">
                <a class="nav-link" data-bs-toggle="collapse" href="#otobus" role="button"
                   aria-expanded="{{ is_active_route(['otobus/*']) }}" aria-controls="email">
                    <i class="link-icon" data-feather="clock"></i>
                    <span class="link-title">Otobüsler</span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                </a>
                <div class="collapse {{ show_class(['otobus/*']) }}" id="otobus">
                    <ul class="nav sub-menu">
                        <li class="nav-item">
                            <a href="{{ url('/otobus-saatleri') }}"
                               class="nav-link {{ active_class(['otobus-saatleri']) }}">Otobüsler</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/otobus-saati-ekle') }}"
                               class="nav-link {{ active_class(['otobus-saati-ekle']) }}">Otobüs Saati Ekle</a>
                        </li>
                    </ul>
                </div>
            </li>
            </li>
            <li class="nav-item {{ active_class(['birim/*']) }}">
                <a class="nav-link" data-bs-toggle="collapse" href="#birim" role="button"
                   aria-expanded="{{ is_active_route(['birim/*']) }}" aria-controls="email">
                    <i class="link-icon" data-feather="briefcase"></i>
                    <span class="link-title">Birimler</span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                </a>
                <div class="collapse {{ show_class(['birim/*']) }}" id="birim">
                    <ul class="nav sub-menu">
                        <li class="nav-item">
                            <a href="{{ url('/birimler') }}"
                               class="nav-link {{ active_class(['birimler']) }}">Birimler</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/birimekle') }}" class="nav-link {{ active_class(['birimekle']) }}">Birim
                                Ekle</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item {{ active_class(['duyuru/*']) }}">
                <a class="nav-link" data-bs-toggle="collapse" href="#duyuru" role="button"
                   aria-expanded="{{ is_active_route(['duyuru/*']) }}" aria-controls="email">
                    <i class="link-icon" data-feather="briefcase"></i>
                    <span class="link-title">Duyurular</span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                </a>
                <div class="collapse {{ show_class(['duyuru/*']) }}" id="duyuru">
                    <ul class="nav sub-menu">
                        <li class="nav-item">
                            <a href="{{ url('/duyurular') }}"
                               class="nav-link {{ active_class(['duyurular']) }}">Duyurular</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/duyuruekle') }}" class="nav-link {{ active_class(['duyuruekle']) }}">Duyuru
                                Ekle</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item {{ active_class(['topluluk/*']) }}">
                <a class="nav-link" data-bs-toggle="collapse" href="#topluluk" role="topluluk"
                   aria-expanded="{{ is_active_route(['topluluk/*']) }}" aria-controls="email">
                    <i class="link-icon" data-feather="user"></i>
                    <span class="link-title">Topluluklar</span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                </a>
                <div class="collapse {{ show_class(['topluluk/*']) }}" id="topluluk">
                    <ul class="nav sub-menu">
                        <li class="nav-item">
                            <a href="{{ url('/topluluklar') }}"
                               class="nav-link {{ active_class(['topluluklar']) }}">Topluluklar</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/toplulukekle') }}" class="nav-link {{ active_class(['toplulukekle']) }}">Topluluk
                                Ekle</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item {{ active_class(['etkinlik/*']) }}">
                <a class="nav-link" data-bs-toggle="collapse" href="#etkinlik" role="etkinlik"
                   aria-expanded="{{ is_active_route(['etkinlik/*']) }}" aria-controls="email">
                    <i class="link-icon" data-feather="calendar"></i>
                    <span class="link-title">Etkinlik</span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                </a>
                <div class="collapse {{ show_class(['etkinlik/*']) }}" id="etkinlik">
                    <ul class="nav sub-menu">
                        <li class="nav-item">
                            <a href="{{ url('/etkinlikler') }}"
                               class="nav-link {{ active_class(['etkinlikler']) }}">Etkinlikler</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/etkinlikekle') }}" class="nav-link {{ active_class(['etkinlikekle']) }}">Etkinlik
                                Ekle</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item {{ active_class(['kalite/*']) }}">
                <a class="nav-link" data-bs-toggle="collapse" href="#kalite" role="kalite"
                   aria-expanded="{{ is_active_route(['kalite/*']) }}" aria-controls="email">
                    <i class="link-icon" data-feather="calendar"></i>
                    <span class="link-title">Kalite Bildirim</span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                </a>
                <div class="collapse {{ show_class(['kalite/*']) }}" id="kalite">
                    <ul class="nav sub-menu">
                        <li class="nav-item">
                            <a href="{{ url('/kaliteler') }}"
                               class="nav-link {{ active_class(['kaliteler']) }}">Kalite Bildirimleri</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/kalitegonderici') }}"
                               class="nav-link {{ active_class(['kalitegonderici']) }}">Kalite Gönderici
                                Tipleri</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/kalitegondericiekle') }}"
                               class="nav-link {{ active_class(['kalitegondericitipekle']) }}">Kalite Gönderici Tipi
                                Ekle</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/kalitebildirim') }}"
                               class="nav-link {{ active_class(['kalitebildirim']) }}">Kalite Bildirim
                                Tipleri</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/kalitebildirimekle') }}"
                               class="nav-link {{ active_class(['kalitebildirimekle']) }}">Kalite Bildirim Tipi
                                Ekle</a>
                        </li>
                    </ul>
                </div>
            </li>
        </ul>
    </div>
</nav>

