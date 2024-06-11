
             <section id="catology_lv2">
                <header class="catology_lv2_header">
                    <a href="../admin/index.html">Bảng điều khiển</a>
                    /
                    <a href="../admin/categorylv2..html">Danh mục san pham</a>
                </header>
                <nav class="catology_lv2_header_nav">
                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="catology_lv2_tool">
                            <div class="catology_lv2_tool_plus">
                                <a href="../admin/index.php?admin=productplus">
                                    <label for="">
                                        <i class="fa-solid fa-plus"></i>
                                        <span>Thêm mới</span>
                                    </label>
                                   
                                </a>
                            </div>
                            <div class="catology_lv2_tool_delete">
                                <a href="../admin/index.php?admin=delalproduct">
                                    <i class="fa-solid fa-trash-can"></i>
                                    <span>Xóa tất cả</span>
                                </a>
                            </div>
                            <div class="catology_lv2_search">
                                <input type="search" name="txtsearch" id="txtsearch" placeholder="Tìm kiếm">
                                <input type="submit" value="Nhập" onclick="return btnsearch()" id="search">
                                <div class="error"></div>
                            </div>
                        </div>
                        <div class="catology_lv2_select">
                            <select name="iddm" id="iddm">
                                 <option value="0" selected>Chọn danh mục</option>
                                <?php
                                    foreach($getall as $choose)
                                    {
                                        echo' <option value="'.$choose['id'].'" >'.$choose['tendm'].'</option>';
                                    }
                                ?>
                            </select>
                        </div>
                        <div class="tb_category_lv2">
                            <header class="table_category_lv2_header">
                                <p>Danh sách sản phẩm</p>
                            </header>
                            <table class="table_category_lv2">
                                <tr>
                                    <th>STT</th>
                                    <th>Tiêu đề</th>
                                    <th>Hình</th>
                                    <th>Hiển thị </th>
                                    <th>Nổi bật</th>
                                    <th>Thao tác</th>
                                </tr>
                                <?php
                                    if (isset($getproduct)&&count($getproduct)>0) {
                                        # code...
                                        $i=1;
                                        foreach ($getproduct as $product ) {
                                            # code...
                                            echo' <tr>
                                                    <td>'.$i.'</td>
                                                    <td><span>'.$product['tensp'].'</span></td>
                                                    <td><img src="'.$product['img'].'" style=" position: relative;  width: 100px; object-fit: cover; height: 100px;"></td>
                                                    <td><input type="checkbox" name="txtdisplay" id="txtdisplay"></td>
                                                    <td><input type="checkbox" name="txtoutstanding" id="txtoutstanding"></td>
                                                    <td><a href="../admin/index.php?admin=editproduct&id='.$product['id'].'" class="edit"><i class="fa-solid fa-pen-to-square"></i></a>|<a href="../admin/index.php?admin=delproduct&id='.$product['id'].'" class="trash"><i class="fa-solid fa-trash-can"></i></a></td>
                                            </tr>';
                                            $i++;
                                        }
                                    }
                                ?>
                             
                            </table>
                        </div>
                    </form>
                   
                </nav>
             </section>
        </div>