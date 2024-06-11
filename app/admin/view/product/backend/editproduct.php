
               <section id="pluscatalog">
                    <header class="level_1_business_category_header">
                        <a href="../admin/index.php">bảng điều khiển</a>
                        /
                        <a href="../admin/catologylv1.html">Sửa danh mục sản phẩm</a>
                    </header>
                    <nav class="level_1_business_pluscatalog">
                        <form action="../admin/index.php?admin=editproduct" method="post" enctype="multipart/form-data">
                            <div class="form_catologo">

                                <div class="zone_1">
                                    <div class="tool_plus">
                                        <div class="tool_save" onclick="return save_catologo_lv1()">
                                            <a href="" >
                                                <label for="txtsub">
                                                    <i class="fa-solid fa-floppy-disk"></i>
                                                    <span>Lưu sản phẩm</span>
                                                </label>
                                                <input type="submit" value="" name="txtsub" id="txtsub" hidden>
                                            </a>
                                        </div>
                                        <div class="tool_reset">
                                            <i class="fas fa-undo"></i>
                                            <input type="reset" value="Làm lại">
                                        </div>
                                        <div class="tool_out" onclick=" return logout_plus()">
                                            <a  href="../admin/index.php?admin=product">
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
                                                    <input type="text" name="txtpath" id="txtpath" placeholder="Đường dẫn (vi)" maxlength="20" value="<?=$getone_product[0]['linksp'] ?>">
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
                                            <td><input type="text" name="txttitle" id="txttitle" placeholder="Tiêu đề (vi)" value="<?= $getone_product[0]['tensp'] ?>"></td>
                                        </tr>
                                        <tr class="tr_form">
                                            <td><p>Mô tả</p></td>
                                            <td><input type="text" name="txtmota" id="txtmota" placeholder="Mô tả (vi)" value="<?= $getone_product[0]['mota'] ?>"></td>
                                        </tr>
                                        <tr class="tr_form">
                                            <td><p>Mô tả</p></td>
                                            <td><input type="number" name="txtnumber" id="txtnumber" placeholder="Giá (vi)" value="<?= $getone_product[0]['price'] ?>"></td>
                                            <td><input type="number" name="txtnumbersales" id="txtnumbersales" placeholder="Giá sales (vi)" value="<?= $getone_product[0]['pricesale'] ?>"></td>
                                        </tr>
                                       </table>
                                    </div>
                                </div>
                                <div class="zone_2">
                                    <div class="choose_cataloguy_lv2">
                                        <header><span>Danh mục cấp 1</span></header>
                                        <select name="iddm" id="iddm">
                                            <option value="chọn danh mục" selected>chọn danh mục</option>
                                            <?php
                                                foreach ($getall as $choose ) {
                                                    # code...
                                                  
                                                        echo'<option value="'.$choose['id'].'" >'.$choose['tendm'].'</option>';
                                                    
                                                }
                                            ?>
                                        </select>
                                    </div>
                                    <div class="upload_product_ctalogoy_lv2">
                                        <header class="upload_product_ctalogoy_lv2_header">
                                            <span>hình ảnh danh mục cấp 2</span>
                                            <div id="error"></div>
                                        </header>
                                        <div class="zone_upload_img_catalogy_lv2">
                                            <label for="txtfiles" class="preview">
                                                <div class="m">
                                                    <i class="fa-solid fa-cloud-arrow-up"></i>
                                                    <span>Kéo và thả hình vào đây hoặc</span>
                                                    <!-- <input type="image" src="" alt=""> -->
                                                     
                                                </div>
                                            </label>
                                            <input type="file" name="txtfiles" id="txtfiles" value="Chọn hình" hidden>
                                            <input type="text" name="id" id="id" value="<?=$getone_product[0]['id']?>">
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </form>
                    </nav>
               </section>
        </div>
       
   