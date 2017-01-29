<?php 
	$header = new Header();
?>
<div id="fastcontactus" class="hf-fastcontactus" style="background: url(<?= $header->absolute_path ?>/images/green-fibers.png);">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-12">
                <p class="fs18 txt-right cwhite">Chỉ cần một chút thông tin nữa thôi <br>tư vấn viên Ivycation sẽ gọi điện trực tiếp cho bạn nhé!</p>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <a class="btn btn-border border-white btn-lg txt-uppercase" title="contact us" data-toggle="modal" data-target="#contactModal">
                    Liên hệ nhanh
                </a>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade in" id="contactModal" tabindex="-1" role="dialog" aria-labelledby="contactModal" style="display: none;">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <h4 class="modal-title" id="contactModalLabel">Liên hệ nhanh</h4>
            </div>
            <div class="modal-body">
                <div id="form-result">
                </div>
                <form id="design_contact_form" class="form-horizontal form-validate">
                    <div class="form-group">
                        <label class="col-sm-2 col-xs-12 control-label">Họ &amp; tên</label>
                        <div class="col-sm-10 col-xs-12">
                            <input id="cus_name" name="cus_name" type="text" class="form-control" placeholder="Họ và tên">
                        </div>                       
                    </div>                
                    <div class="form-group">
                        <label class="col-sm-2 col-xs-12 control-label">Email</label>
                        <div class="col-sm-4 col-xs-12">
                            <input type="email" id="cus_email" name="cus_email" class="form-control" placeholder="Email">
                        </div>
                        <label class="col-sm-2 col-xs-12 control-label">Điện thoại</label>
                        <div class="col-sm-4 col-xs-12">
                            <input type="text" id="cus_mobile" maxlength="12" name="cus_mobile" class="form-control" placeholder="Điện thoại">
                        </div>                        
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 col-xs-12 control-label">Trường </label>
                        <div class="col-sm-4 col-xs-12">
                            <input type="text" id="cus_school" maxlength="12" name="cus_school" class="form-control" placeholder="Trường">
                            <span class="help-block">Trường bạn đang theo học?</span>
                        </div>
                        <label class="col-sm-2 col-xs-12 control-label">Khóa học</label>
                        <div class="col-sm-4 col-xs-12">
                            <div class="btn-group bootstrap-select form-control show-menu-arrow"><button type="button" class="btn dropdown-toggle btn-default" data-toggle="dropdown" role="button" title="Basic SAT"><span class="filter-option pull-left">Basic SAT</span>&nbsp;<span class="bs-caret"><span class="caret"></span></span></button><div class="dropdown-menu open" role="combobox"><ul class="dropdown-menu inner" role="listbox" aria-expanded="false"><li data-original-index="0" class="selected"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="true"><span class="text">Basic SAT</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="1"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Advanced SAT</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="2"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Intensive SAT</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="3"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Basic TOEFL</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="4"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Advanced TOEFL</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="5"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Luyện thi  ACT</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="6"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Lớp SAT 2</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="7"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Lãnh đạo trẻ - Leadership</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="8"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Creative Writing</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="9"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">College Essay Writing</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="10"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Application Strategy</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="11"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Lớp GRE</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li></ul></div><select class="form-control selectpicker show-menu-arrow" tabindex="-98">
                                <option>Basic SAT</option>
                                <option>Advanced SAT</option>
                                <option>Intensive SAT</option>
                                <option>Basic TOEFL</option>
                                <option>Advanced TOEFL</option>
                                <option>Luyện thi  ACT</option>
                                <option>Lớp SAT 2</option>
                                <option>Lãnh đạo trẻ - Leadership</option>
                                <option>Creative Writing</option>
                                <option>College Essay Writing</option>
                                <option>Application Strategy</option>
                                <option>Lớp GRE</option>
                            </select></div>
                            <span class="help-block">Khóa học bạn quan tâm</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-xs-12">Khu vực bạn có thể tham gia khóa học?</label>
                        <div class="col-xs-12">
                            <div class="radio radio-info">
                                <input id="ivyhn" value="ivyhn" name="ivylocation" checked="" type="radio">
                                <label for="ivyhn"> Ivycation - Hà Nội </label>
                            </div>                          
                            <div class="radio radio-info">
                                <input id="ivysg" value="ivysg" name="ivylocation" checked="" type="radio">
                                <label for="ivysg"> Ivycation - Hồ Chí Minh </label>
                            </div>  
                        </div>
                    </div>    
                    <div class="form-group">
                        <label class="col-xs-12">Tâm sự cùng Ivycation nhé!</label>
                        <div class="col-xs-12">
                            <textarea name="design_description" id="design_description" class="form-control" rows="3"></textarea>
                        </div>                        
                    </div>                    
                </form>

            </div>
            <input type="hidden" name="option" value="com_k2">
            <input type="hidden" name="view" value="user">
            <input type="hidden" name="task" value="send">
            <input type="hidden" name="format" value="raw">           
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
                <button type="button" id="contact_submit" class="btn btn-red">Gửi yêu cầu</button>
            </div>
        </div>
    </div>
</div>
				
<!-- E: mainbody-footer -->

</section>
<footer id="footer" class="hf-footer">
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-xs-12">
				<div class="logofooter">
					<p>The school also focuses on personality development for students in a comprehensive manner, especially compassion</p>
					<p>
						<strong>Hà Nội</strong><br>
						Tầng 6, Tòa nhà Agribank 180 Trần Duy Hưng, Hà Nội.<br>
						Hotline: 098 164 6789<br>
						Tầng 2: L2-04, tòa  T3 Times City, 458 Minh Khai, Hà Nội.<br>
						Hotline: 0942 897 897
					</p>
					<p>
						<strong>TP Hồ Chí Minh</strong><br>
						Địa chỉ: Lâu 1, 62A Phạm Ngọc Thạch, Phường 6, Quận 3 - Hotline: 0961 568 569<br>
						Tel: (84.4) 0961 568 569– (84) 0961 568 569<br>
						Email: info@ivycation.edu.vn
					</p>
				</div>
			</div>
			<div class="col-md-6 col-xs-12" style="display: none;">
				<div class="menufooter">
					<div class="moduletable">
						<h3>Ivycation</h3>
						<ul class="nav menumenu-footer">
							<li class="item-125"><a href="#" class="footer-aboutus"> Giới thiệu</a></li><li class="item-126"><a href="#" class="footer-news">Tin tức &amp; Sự kiện</a></li><li class="item-127"><a href="#" class="footer-share">Góc chia sẻ</a></li><li class="item-128"><a href="#" class="footer-library">Thư viện</a></li><li class="item-129"><a href="#" class="footer-award">Thành tích</a></li><li class="item-130"><a href="#" class="footer-time">Thời khoá biểu</a></li><li class="item-131"><a href="#" class="footer-canlendar"> Lịch khai giảng</a></li></ul>
						</div>
						<div class="moduletable">
							<h3>Khoá học</h3>
							<ul class="nav menumenu-footer">
								<li class="item-132"><a href="#" class="footer-note"> Luyện thi SAT</a></li><li class="item-133"><a href="#" class="footer-note">Luyện thi ACT</a></li><li class="item-134"><a href="#" class="footer-note"> Luyện thi TOEFL</a></li><li class="item-135"><a href="#" class="footer-note">Khóa học Leadership</a></li><li class="item-136"><a href="#" class="footer-note"> Lớp Application</a></li><li class="item-137"><a href="#" class="footer-note"> Lớp Interview</a></li><li class="item-138"><a href="#" class="footer-note">Viết sáng tạo</a></li></ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</footer>
	</body>
</body>
</html>