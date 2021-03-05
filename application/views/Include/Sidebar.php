        <div class="sidebar sidebar-style-2">           
            <div class="sidebar-wrapper scrollbar scrollbar-inner">
                <div class="sidebar-content">
                    <div class="user">
                        <div class="avatar-sm float-left mr-2">
                            <img src="<?= base_url('ui/assets/img/profile.jpg') ?>" alt="..." class="avatar-img rounded-circle">
                        </div>
                        <div class="info">
                            <a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
                                <span>
                                    Hizrian
                                    <span class="user-level">Administrator</span>
                                    <span class="caret"></span>
                                </span>
                            </a>
                            <div class="clearfix"></div>

                            <div class="collapse in" id="collapseExample">
                                <ul class="nav">
                                    <li>
                                        <a href="#profile">
                                            <span class="link-collapse">My Profile</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#edit">
                                            <span class="link-collapse">Edit Profile</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#settings">
                                            <span class="link-collapse">Settings</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <ul class="nav nav-primary">
                        <li class="nav-item active">
                            <a data-toggle="collapse" href="#dashboard" class="collapsed" aria-expanded="false">
                                <i class="fas fa-home"></i>
                                <p>ภาพรวม</p>
                                <span class="caret"></span>
                            </a>
                            <div class="collapse" id="dashboard">
                                <ul class="nav nav-collapse">
                                    <li><a href="<?= base_url() ?>"><span class="sub-item">ภาพรวม 1</span></a></li>
                                    <li><a href="<?= base_url() ?>"><span class="sub-item">ภาพรวม 2</span></a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-section">
                            <span class="sidebar-mini-icon">
                                <i class="fa fa-ellipsis-h"></i>
                            </span>
                            <h4 class="text-section">เมนูการทำงาน</h4>
                        </li>
                        <li class="nav-item">
                            <a data-toggle="collapse" href="#Grp1">
                                <i class="fas fa-layer-group"></i>
                                <p>สถิติ (Summary)</p>
                                <span class="caret"></span>
                            </a>
                            <div class="collapse" id="Grp1">
                                <ul class="nav nav-collapse">
                                    <li><a href="<?= base_url() ?>"><span class="sub-item">จำนวนถังในระบบ</span></a></li>
                                    <li><a href="<?= base_url() ?>"><span class="sub-item">จำนวนรถในระบบ</span></a></li>
                                    <li><a href="<?= base_url() ?>"><span class="sub-item">จำแนกผลรวมการจัดเก็บ</span></a></li>
                                    <li><a href="<?= base_url() ?>"><span class="sub-item">รายงานผลการส่งซ่อมบำรุง</span></a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a data-toggle="collapse" href="#Grp2">
                                <i class="fas fa-layer-group"></i>
                                <p>บริหารการจัดเก็บ</p>
                                <span class="caret"></span>
                            </a>
                            <div class="collapse" id="Grp2">
                                <ul class="nav nav-collapse">
                                    <li><a href="<?= base_url() ?>"><span class="sub-item">แผนที่การจัดเก็บ</span></a></li>
                                    <li><a href="<?= base_url() ?>"><span class="sub-item">ตารางแสดงผลการจัดเก็บ</span></a></li>
                                    <li><a href="<?= base_url() ?>"><span class="sub-item">จัดกลุ่มผู้ใช้และรถ</span></a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a data-toggle="collapse" href="#Grp3">
                                <i class="fas fa-layer-group"></i>
                                <p>จัดการข้อมูลผู้ใช้</p>
                                <span class="caret"></span>
                            </a>
                            <div class="collapse" id="Grp3">
                                <ul class="nav nav-collapse">
                                    <li><a href="<?= base_url() ?>"><span class="sub-item">ตารางแสดงผลผู้ใช้งาน</span></a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a data-toggle="collapse" href="#Grp4">
                                <i class="fas fa-layer-group"></i>
                                <p>จัดการข้อมูลรถ</p>
                                <span class="caret"></span>
                            </a>
                            <div class="collapse" id="Grp4">
                                <ul class="nav nav-collapse">
                                    <li><a href="<?= base_url() ?>"><span class="sub-item">ตารางแสดงผลข้อมูลรถ</span></a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a data-toggle="collapse" href="#Grp5">
                                <i class="fas fa-layer-group"></i>
                                <p>จัดการข้อมูลถังขยะ</p>
                                <span class="caret"></span>
                            </a>
                            <div class="collapse" id="Grp5">
                                <ul class="nav nav-collapse">
                                    <li><a href="<?= base_url() ?>"><span class="sub-item">ตารางแสดงข้อมุลถังขยะ</span></a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>