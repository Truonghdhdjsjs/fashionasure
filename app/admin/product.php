
             <section id="catology_lv2">
                <header class="catology_lv2_header">
                    <a href="../admin/index.html">Bảng điều khiển</a>
                    /
                    <a href="../admin/index.php?admin=sanpham&danhmuc">Danh mục sản phẩm </a>
                </header>
                <nav class="catology_lv2_header_nav">
                    <form action="" method="post">
                        <div class="catology_lv2_tool">
                            <div class="catology_lv2_tool_plus">
                                <a href="../admin/index.php?admin=plusproduct">
                                    <i class="fa-solid fa-plus"></i>
                                    <span>Thêm mới</span>
                                </a>
                            </div>
                            <div class="catology_lv2_tool_delete">
                                <a href="../admin/index.php?admin=delallproduct">
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
                            <select name="txtselext" id="txtselext">
                                 <option value="0" selected>Chọn danh mục</option>
                                <?php
                                    if (isset($catalogy)&&count($catalogy)) {
                                        # code...
                                        foreach ($catalogy as $dm ) {
                                            # code...
                                            echo ' <option value="'.$dm['id'].'">'.$dm['tendm'].'</option>';
                                        }
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
                                    <th>Hình</th>
                                    <th>Tiêu đề</th>
                                    <th>Hiển thị </th>
                                    <th>Nổi bật</th>
                                    <th>Thao tác</th>
                                </tr>
                                <?php
                                    if(isset($kq)&&count($kq)>0)
                                    {
                                        $i=1;
                                        foreach($kq as $product)
                                        {
                                            echo' <tr>
                                                <td>'.$i.'</td>
                                                <td><img src="'.$product['img'].'" style="position: relative; width:50px;  object-fit: cover;  height: 50px;"></td>
                                                <td>'.$product['tensp'].'</td>
                                                <td><input type="checkbox" name="txtdisplay" id="txtdisplay"></td>
                                                <td><input type="checkbox" name="txtoutstanding" id="txtoutstanding"></td>
                                                <td> <a href="../admin/index.php?admin=editptoduct&id='.$product['id'].'" class="edit"><i class="fa-solid fa-pen-to-square"></i></a>
                                                |
                                                <a href="../admin/index.php?admin=delproduct&id='.$product['id'].'" class="trash"><i class="fa-solid fa-trash-can"></i></a></td>
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
       
  