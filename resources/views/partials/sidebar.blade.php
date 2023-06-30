<aside id="sidebar" class="sidebar">
   <ul class="sidebar-nav" id="sidebar-nav">
      <li class="nav-item">
         @auth
            @if (auth()->user()->role=="admin")
               <a class="nav-link collapsed {{ ($active === "home") ? 'active' : '' }}" href="/home/admin"> <i class="bi bi-grid"></i><span>Home</span> </a>
               <a class="nav-link collapsed {{ ($active === "log activity") ? 'active' : '' }}" href="/home/admin/logActivity"> <i class="bi bi-eye"></i><span>Log Activity</span> </a>
            @endif 
         @endauth 
               <a class="nav-link collapsed {{ ($active === "home") ? 'active' : '' }}" href="/home"> <i class="bi bi-grid"></i><span>Home</span> </a>
               <a class="nav-link collapsed {{ ($active === "janji temu") ? 'active' : '' }}" href="/JanjiTemu"> <i class="bi bi-person-lines-fill"></i><span>Janji Temu</span> </a> 
               <a class="nav-link collapsed {{ ($active === "toko obat") ? 'active' : '' }}" href="/TokoObat"> <i class="bi bi-capsule-pill"></i><span>Toko Obat</span> </a> 
               <a class="nav-link collapsed {{ ($active === "history") ? 'active' : '' }}" href="/pesananSaya"> <i class="bi bi-list-ul"></i><span>History</span> </a> 
      </li>
      @auth
         <li class="nav-item">
            <form action="/logout" method="post" class="nav-link collapsed">
               @csrf
                  <button type="submit">
                     <i class="bi bi-box-arrow-in-left"></i><span>Logout</span>
                  </button>
            </form>
         </li>
      @endauth 
   </ul>
</aside>