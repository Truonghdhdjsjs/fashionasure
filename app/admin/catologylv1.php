
             <section id=" level_1_business_category">
                <header class="level_1_business_category_header">
                    <a href="../admin/index.php">bảng điều khiển</a>
                    /
                    <a href="../admin/index.php?admin=danhmuccap1">danh mục cấp 1</a>
                </header>
                <nav class="level_1_business_category_nav">
                    <form action="" method="post">
                        <div class="input_tool">
                            <div class="add_product">
                               <a href="../admin/index.php?admin=plus_catalogylv1">
                                    <i class="fa-solid fa-plus"></i>
                                    <span>Thêm mới</span>
                               </a>
                            </div>
                            <div class="dellet_product">
                                <a href="../admin/index.php?admin=delall">
                                    <i class="fa-regular fa-trash-can"></i>
                                    <span>Xóa tất cả</span>
                               </a>
                            </div>
                            <div class="search_product">
                                <form action="../admin/index.php?admin=timkiemdanhmuc" method="post">
                                    <input type="search" name="txtsearch" id="txtsearch" placeholder="Tìm kiếm" maxlength="15">
                                    <input type="submit" value="Nhập" onclick="return btnsearch()" id="search" name="txtsbt">
                                    <div class="error"></div>
                                </form>
                            </div>
                        </div>
                    </form>
                    <div class="category">
                        <div class="category_txt">
                            <span class="category_txt_name">Danh mục cấp 1</span>
                        </div>
                        <table class="table_category">
                            <tr class="table_tr">
                                <th>STT</th>
                                <th>Tiêu đề</th>
                                <th>Nổi bật </th>
                                <th>Hiển thị</th>
                                <th>Thao tác</th>
                            </tr>
                            <?php
                                    if(isset($kq)&&count($kq))
                                    {
                                        $i=1;
                                        foreach($kq as $dm)
                                        {
                                                echo' <tr class="table_tr">
                                                        <td>'.$i.'</td>
                                                        <td><span>'.$dm['tendm'].'</span></td>
                                                        <td><input type="checkbox" name="txtoutstanding" id="txtoutstanding"> </td>
                                                        <td><input type="checkbox" name="txtdisplay" id="txtdisplay"> </td>
                                                        <td class="table_linl">  
                                                        <a href="../admin/index.php?admin=edit_catalogylv1&id='.$dm['id'].'" class="edit"><i class="fa-solid fa-pen-to-square" class="delete"></i></a>
                                                        |
                                                        <a href="../admin/index.php?admin=delete_dm&id='.$dm['id'].'"><i class="fa-regular fa-trash-can"></i></a>
                                                        </td>
                                                    </tr>';
                                                $i++;
                                        }
                                    }
                            ?>
                        </table>
                    </div>
                </nav>
             </section>
        </div>
    