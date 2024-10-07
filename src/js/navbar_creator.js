
    menu = `
<header id="h-space" class="text-center">
    <nav class="navbar navbar-expand-lg  fixed-top" style="--bs-navbar-padding-y: 0rem; z-index: 10; box-shadow: 1px 2px 10px grey; --bs-bg-opacity: 1;">
        <div class="container-xxl theme little-dark" style="min-height: 50px;  text-align: justify">
            <h3  style="font-family: 'Montserrat', sans-serif;font-weight: bold;margin-bottom:0"><span >ВсеЗнай</span></h3>
            <!--тайная кнопка-->

            <div>
               
                <!--профиль-->

                <!---->
            </div>
            <div style="flex-grow: 0; " class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
<!--<div style="border: 1px solid red; display: flex">-->
                    
                    <!--                       -->

<!--</div>-->
                    <!---->
                </ul>
            </div>
        </div>
    </nav>
</header>


<!---->
<!--material-->
<div class="offcanvas offcanvas-start offcanvas-right" style="background-color: #F5F5F5" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasExampleLabel">Материал</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Закрыть"></button>
    </div>
    <div class="offcanvas-body" style="overflow: hidden;">
        <!--прогресбар-->
        
        <hr>
        <div class="material-body-scroll">
            <div class="list-lessons">

            </div>
        </div>
    </div>
</div>





<!---->



`;

    document.body.insertAdjacentHTML('afterbegin', menu);
    let btnMaterial =  document.getElementById('btnMaterial');
    let btnMain = document.getElementById('btnMain');
    // console.log(btnMaterial);





