<div class="hero-banner">
    <div class="slider">
        {slides}
            <div class="item">
                <a href="{link}" class="link">
                    <figure class="cover">
                        <img src="{banner}" alt="" class="img-cover">
                    </figure>
                </a>
            </div>
        {/slides}
    </div>
</div>
<div class="home-section-1">
    <div class="container">
        <div class="whead">
            <h2 class="title">หลักสูตรใหม่</h2>
        </div>
        <div class="course-list">
            <ul class="item-list">
                {new_courses}
                    <li>
                        <div class="course-wrapper">
                            <a href="course/detail?id={id}" class="link">
                                <figure class="cover">
                                    <img src="{thumbnail}" alt="" class="img-cover">
                                </figure>
                            </a>
                            <div class="inner">
                                <div class="content">
                                    <a href="course/detail?id={id}" class="link">
                                        <h4 class="title">{subject}</h4>
                                        <small>COURSE01</small>
                                        <p class="desc">{short_description}</p>
                                    </a>
                            </div>
                            <div class="info">
                                <ul class="item-list fluid">
                                    <li>

                                        <span class="feather icon-calendar text-primary"></span>
                                        วันที่เรียน {date_learn}
                                    </li>
                                    <li>
                                        <span>
                                            <img src="assets/img/icon/ticket.svg" alt="">
                                        </span>
                                        เหลือ 50/{amount} ที่นั่ง
                                    </li>
                                </ul>
                            </div>
                            <div class="action">
                                <a href="course/detail?id={id}"
                                    class="btn fluid btn-sm btn-primary">ลงทะเบียน</a>
                            </div>
                        </div>
                    </div>
                </li>
                {/new_courses}
            </ul>
        </div>
    </div>
</div>

<div class="home-section-2">
    <div class="container">
        <div class="whead">
            <h2 class="title">หลักสูตรยอดนิยม</h2>
        </div>
        <div class="course-list">
            <ul class="item-list">
            {hot_courses}
                    <li>
                        <div class="course-wrapper">
                            <a href="course/detail?id={id}" class="link">
                                <figure class="cover">
                                    <img src="{thumbnail}" onerror="this.src='assets/img/static/noimg.jpg'" alt="" class="img-cover">
                                </figure>
                            </a>
                            <div class="inner">
                                <div class="content">
                                    <a href="course/detail?id={id}" class="link">
                                        <h4 class="title">{subject}</h4>
                                        <small>COURSE01</small>
                                        <p class="desc">{short_description}</p>
                                    </a>
                                </div>
                            <div class="info">
                                <ul class="item-list fluid">
                                    <li>

                                        <span class="feather icon-calendar text-primary"></span>
                                        วันที่เรียน {date_learn}
                                    </li>
                                    <li>
                                        <span>
                                            <img src="assets/img/icon/ticket.svg" alt="">
                                        </span>
                                        เหลือ 50/{amount} ที่นั่ง
                                    </li>
                                </ul>
                            </div>
                            <div class="action">
                                <a href="course/detail?id={id}"
                                    class="btn fluid btn-sm btn-primary">ลงทะเบียน</a>
                            </div>
                        </div>
                    </div>
                </li>
                {/hot_courses}
            </ul>
        </div>

        <div class="wg-calendar">
            <div class="row no-gutters align-items-center">
                <div class="col-md order-md-2">
                    <div class="inner">
                        <h2 class="title">ปฏิทินประชาสัมพันธ์โครงการ</h2>
                        <p class="desc">
                            ข่าวประกาศ และประชาสัมพันธ์ โครงการกิจกรรม
                        </p>
                        <div class="action">
                            <a href="calendar" class="btn btn-primary">
                                ดูเพิ่มเติม
                                <span class="feather icon-arrow-right"></span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-auto order-md-1">
                    <figure class="cover">
                        <img src="assets/img/static/wg-calendar.png" alt="">
                    </figure>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="home-section-3">
    <div class="container">
        <div class="whead">
            <div class="row align-items-center">
                <div class="col">
                    <h2 class="title">หลักสูตรทั้งหมด</h2>
                </div>
                <div class="col-auto">
                    <a href="course.php" class="btn btn-sm btn-primary">
                        ดูเพิ่มเติม
                        <span class="feather icon-arrow-right"></span>
                    </a>
                </div>
            </div>
        </div>
        <div class="course-list">
            <ul class="item-list">
            {all_courses}
                <li>
                    <div class="course-wrapper">
                        <a href="course/detail?id={id}" class="link">
                            <figure class="cover">
                                <img src="{thumbnail}" onerror="this.src='assets/img/static/noimg.jpg'" alt="" class="img-cover">
                            </figure>
                        </a>
                        <div class="inner">
                            <div class="content">
                                <a href="course/detail?id={id}" class="link">
                                    <h4 class="title">{subject}</h4>
                                    <small>COURSE01</small>
                                    <p class="desc">{short_description}</p>
                                </a>
                            </div>
                            <div class="info">
                                <ul class="item-list fluid">
                                    <li>

                                        <span class="feather icon-calendar text-primary"></span>
                                        วันที่เรียน {date_learn}
                                    </li>
                                    <li>
                                        <span>
                                            <img src="assets/img/icon/ticket.svg" alt="">
                                        </span>
                                        เหลือ 50/{amount} ที่นั่ง
                                    </li>
                                </ul>
                            </div>
                            <div class="action">
                                <a href="course/detail?id={id}"
                                    class="btn fluid btn-sm btn-primary">ลงทะเบียน</a>
                            </div>
                        </div>
                    </div>
                </li>
                {/all_courses}
            </ul>
        </div>
    </div>
</div>