
<header class="header-desktop">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="header-wrap">
                <form class="form-header" action="" method="get">
                    <input class="au-input au-input--xl" type="text" name="search" placeholder="Search" value="" />
                    <button class="au-btn--submit" type="submit">
                        <i class="zmdi zmdi-search"></i>
                    </button>
                </form>
                <div class="header-button">
                    <div class="account-wrap">
                        <div class="account-item clearfix js-item-menu">

                            <div class="content">
                                <a class="js-acc-btn" href="#">{{$loginname}}</a>
                            </div>
                            <div class="account-dropdown js-dropdown">
                                <div class="info clearfix">
                                        <h5 class="name">
                                            <a style="color: black" href="#">{{$loginname}}</a>
                                        </h5>
                                        <span class="email">{{$loginemail}}</span>
                                </div>

                                <div class="account-dropdown__footer">
                                    <a href="logout">
                                        <i class="zmdi zmdi-power"></i>Logout</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- HEADER DESKTOP-->


