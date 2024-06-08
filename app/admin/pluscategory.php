
               <section id="pluscatalog">
                    <header class="level_1_business_category_header">
                        <a href="../admin/index.html">bảng điều khiển</a>
                        /
                        <a href="../admin/catologylv1.html">Thêm danh mục cấp 1</a>
                    </header>
                    <nav class="level_1_business_pluscatalog">
                        <form action="../admin/index.php?admin=plus_catalogylv1_tool" method="post">
                            <div class="tool_plus">
                                <div class="tool_save" onclick="return save_catologo_lv1()">
                                    <a href="" >
                                        <label for="txtsub">
                                            <i class="fa-solid fa-floppy-disk"></i>
                                            <span>Lưu sản phẩm</span>
                                        </label>
                                        <input type="submit" value="lưu dũ liệu" name="txtsub" id="txtsub" hidden>
                                    </a>
                                </div>
                                <div class="tool_reset">
                                    <label for="btnreset">
                                        <i class="fas fa-undo"></i>
                                        <span>Làm lại</span>
                                    </label>
                                    <input type="reset" value="Làm lại" id="btnreset" hidden>
                                </div>
                                <div class="tool_out" onclick=" return logout_plus()">
                                    <a  href="../admin/index.php?admin=danhmuccap1">
                                        <i class="fa-solid fa-right-from-bracket"></i>
                                        <span>Thoát</span>
                                    </a>
                                </div>
                            </div>
                            <div class="table_form">
                               <div class="notification-plus">
                                    <p class="text">Đường dẫn</p>
                                    <p id="erorr_notification_plus"></p>
                               </div>
                               <table class="table_plus_catolog">
                                    <tr>
                                        <td><span>Đường dẫn mẫu(vi)</span></td>
                                        <td>
                                            <input type="text" name="txtpath" id="txtpath" placeholder="Đường dẫn (vi)" maxlength="20" >
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
       
