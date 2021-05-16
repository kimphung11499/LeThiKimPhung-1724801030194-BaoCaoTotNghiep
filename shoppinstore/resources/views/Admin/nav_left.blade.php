<div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Core</div>
                            <a class="nav-link" href="index.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Shoppin-Store
                            </a>
                            <div class="sb-sidenav-menu-heading">Sản Phẩm</div>
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayoutsa" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Quản lý sản phẩm
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i>
                                </div>
                            </a>
                            <div class="collapse" id="collapseLayoutsa" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    {{-- <a class="nav-link" href="{{URL::to('/admin/product/add')}}">Create Product</a> --}}
                                    <a class="nav-link" href="{{URL::to('/admin/product/show')}}">Danh sách sản phẩm</a>
                                    
                                </nav>
                            </div>

                           

                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayoutsb" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Quản lý danh mục
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i>
                                </div>
                            </a>
                            <div class="collapse" id="collapseLayoutsb" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="{{URL::to('/admin/category/add')}}">Thêm/Danh sách danh mục</a>
                                   
                                </nav>
                            </div>

                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayoutsc" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Quản lý thương hiệu
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i>
                                </div>
                            </a>
                            <div class="collapse" id="collapseLayoutsc" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="{{URL::to('/admin/brand/add')}}">Thêm/Danh sách thương hiệu</a>
                                   
                                </nav>
                            </div>
                            
                            <div class="sb-sidenav-menu-heading">Đơn Hàng</div>
                                <a class="nav-link" href="{{route('order.list')}}">
                                    <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                    Quản lý đơn đặt hàng
                                </a>

                                
                                <a class="nav-link" href="{{URL::to('/admin/product/statistical')}}">
                                    <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                    Quản lý tồn kho
                                </a>
                            <a class="nav-link" href="{{route('list.invoice')}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Invoice
                            </a>
                            <a class="nav-link" href="{{route('browse.comment')}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Đánh giá sản phẩm
                            </a>

                            <a class="nav-link" href="{{route('list.admin')}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Admim
                            </a>

                            
                            
                        </div>
                    </div>
                    
                </nav>
            </div>