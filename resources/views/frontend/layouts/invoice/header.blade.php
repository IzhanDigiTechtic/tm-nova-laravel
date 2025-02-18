<header>
    <div class="header">
        <div class="head_lp">
            <div class="container">
                <div class="row rowFlex">
                    <div class="col-xs-3 ">
                        <div class="logo">
                            <img src="{{asset('img/logo.png')}}" alt="usaclasshelps" loading="lazy" width="160" height="57" class="h-auto"/>
                        </div>
                    </div>
                    <div class="col-xs-9">
                      <div class="lpButton">
                        <ul class="contactLp responsive__class">
                            <li><a href="tel:{{ config('var.phone') }}" aria-label="live chat button"><span><i class="fa fa-phone"></i></span><span class="remove__on__mobile__screen">{{ config('var.phone') }}</span></a></li>
                           
                        </ul>
                  
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>