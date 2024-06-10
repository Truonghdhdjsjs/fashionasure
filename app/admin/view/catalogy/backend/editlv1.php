
               <section id="pluscatalog">
                    <header class="level_1_business_category_header">
                        <a href="../admin/index.html">bảng điều khiển</a>
                        /
                        <a href="../admin/catologylv1.html">Sửa danh mục cấp 1</a>
                    </header>
                    <nav class="level_1_business_pluscatalog">
                        <form action="" method="post">
                            <div class="tool_plus">
                                <div class="tool_save" onclick="return save_catologo_lv1()">
                                    <a href="" >
                                        <i class="fa-solid fa-floppy-disk"></i>
                                        <span>Lưu sản phẩm</span>
                                    </a>
                                </div>
                                <div class="tool_reset">
                                    <i class="fas fa-undo"></i>
                                    <input type="reset" value="Làm lại">
                                </div>
                                <div class="tool_out" onclick=" return logout_plus()">
                                    <a  href="">
                                        <i class="fa-solid fa-right-from-bracket"></i>
                                        <span>Thoát</span>
                                    </a>
                                </div>
                            </div>
                            <div class="table_form">
                               <div class="notification-plus">
                                    <p class="text">Thay đổi đường dẫn theo tiêu đề</p>
                                    <p id="erorr_notification_plus"></p>
                               </div>
                               <table class="table_plus_catolog">
                                    <tr>
                                        <td><span>Đường dẫn mẫu(vi)</span></td>
                                        <td>
                                            <input type="text" name="txtpath" id="txtpath" placeholder="Đường dẫn (vi)" maxlength="20">
                                        </td>
                                    </tr> 
                               </table>
                               <table class="table_plus_catolog">
                                    <div class="title_txt">
                                        <p>nội dung danh mục cấp 1</p>
                                    </div>
                                <tr>
                                    <div class="checkbox_table_display">
                                        <div class="checkbox_tabel_outstanding">
                                            <span>Nổi bật</span>
                                            <input type="checkbox" name="chkoutstanding" id="chkoutstanding">
                                        </div>
                                        <div class="checkbox_tabel_outstanding">
                                            <span>Hiển thị</span>
                                            <input type="checkbox" name="chkdisplay" id="chkdisplay">
                                        </div>
                                    </div>
                                </tr>
                                <tr class="tr_form">
                                    <td><p>Tiêu đề</p></td>
                                    <td><input type="text" name="txttitle" id="txttitle" placeholder="Tiêu đề (vi)"></td>
                                </tr>
                               </table>
                            </div>
                        </form>
                    </nav>
               </section>
        </div>
       
  