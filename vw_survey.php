<section class="site-container">
<div class="default-page">
    <div class="container">
        <div class="default-filter">
            <div class="card">
                <div class="card-header">
                    <h2 class="title">ค้นหาแบบสำรวจ</h2>
                </div>
                <div class="card-body">
                    <form class="form-default" method="get" action="" name="frmSurveySearch">
                        <div class="row gutters-10 align-items-center">
                            <div class="col">
                                <div class="form-group mb-0">
                                    <div class="block-control">
                                        <input class="form-control"
                                            type="text"
                                            id="survey-search"
                                            name="search"
                                            value="{survey_search}"
                                            placeholder="ค้นหา..."
                                            data-error="">
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group mb-0">
                                    <div class="block-control has-icon">
                                        <span class="icon feather icon-calendar"></span>
                                        <input class="form-control datepicker"
                                            type="text"
                                            id=""
                                            name="date"
                                            value=""
                                            placeholder=""
                                            data-error="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-auto">
                                <button type="submit" class="btn btn-primary">
                                    <span class="feather icon-search"></span>
                                    ค้นหา
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="whead">
            <h2 class="title">แบบสำรวจ</h2>
        </div>
        <div id="survey-content" class="survey-list">
            <ul class="item-list">
                {datalist}
                <li>
                <div class="survey-wrapper">
                    <div class="row no-gutters">
                        <div class="col-md-auto">
                            <a href="{link}" class="link">
                                <figure class="cover">
                                    <img src="{pic}" onerror="this.src='assets/img/static/noimg.jpg'" alt="" class="img-cover">
                                </figure>
                            </a>
                        </div>
                        <div class="col-md">
                            <div class="inner">
                                <a href="{link}" class="link">
                                    <h4 class="title">
                                        {subject}
                                    </h4>
                                </a>
                                <p class="desc">
                                    {detail}
                                </p>
                                <div class="action">
                                    <a href="{link}" class="btn btn-primary">ทำแบบสำรวจ</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </li>
                {/datalist}
            </ul>
        </div>
    <div class="pagination-block">
    <div class="row justify-content-between align-items-center">
        <div class="col-md-auto">
            <span class="fw-normal typo-micro text-primary">ทั้งหมด {row_count} รายการ</span>
        </div>
        <div class="col-md-auto">
            <div class="pagination">
                <ul class="item-list">
                    <li>
                        <a href="#" class="link"><span class="feather icon-chevron-left"></span></a>
                    </li>
                    <li class="active">
                        <a href="#" class="link">1</a>
                    </li>
                    <li class="">
                        <a href="#" class="link">2</a>
                    </li>
                    <li class="">
                        <a href="#" class="link">3</a>
                    </li>
                    <li>
                        <a href="#" class="link">4</a>
                    </li>
                    <li>
                        <a href="#" class="link">
                            <span class="feather icon-more-horizontal"></span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="link">20</a>
                    </li>
                    <li>
                        <a href="#" class="link"><span class="feather icon-chevron-right"></span></a>
                    </li>
                </ul>
            </div> 
        </div>
    </div>
</div>
                </div>
            </div>
        </section>

    </div>

<script>
    if (document.getElementById('survey-search').value != "") {
        let search = document.getElementById('survey-search').value;
        if (search.indexOf(' ') !== -1) {
            search = search.split(' ');
            search.forEach(elem => {
                strHighlight(elem, 'survey-content');
            });
        } else {
            strHighlight(search, 'survey-content');
        }
    }
</script>