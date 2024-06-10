
             <section id=" level_1_business_category">
                <header class="level_1_business_category_header">
                    <a href="../admin/index.html">bảng điều khiển</a>
                    /
                    <a href="../admin/catologylv1.html">danh mục cấp 1</a>
                </header>
                <nav class="level_1_business_category_nav">
                    <form action="" method="post">
                        <div class="input_tool">
                            <div class="add_product">
                               <a href="../admin/index.php?admin=pluscotalary">
                                    <i class="fa-solid fa-plus"></i>
                                    <span>Thêm mới</span>
                               </a>
                            </div>
                            <div class="dellet_product">
                                <a href="../admin/index.php?admin=delcatalogy">
                                    <i class="fa-regular fa-trash-can"></i>
                                    <span>Xóa tất cả</span>
                               </a>
                            </div>
                            <div class="search_product">
                                <input type="search" name="txtsearch" id="txtsearch" placeholder="Tìm kiếm">
                                <input type="submit" value="Nhập" onclick="return btnsearch()" id="search">
                                <div class="error"></div>
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
                                if (isset($getall)&& count($getall)>0) {
                                    $i=1;
                                    foreach($getall as $dm)
                                    {
                                        echo' <tr class="table_tr">
                                                <td>'.$i.'</td>
                                                <td><span>'.$dm['tendm'].'</span></td>
                                                <td><input type="checkbox" name="txtoutstanding" id="txtoutstanding"> </td>
                                                <td><input type="checkbox" name="txtdisplay" id="txtdisplay"> </td>
                                                <td class="table_linl"><a href="" class="edit"><i class="fa-solid fa-pen-to-square" class="delete"></i></a>|<a href=""><i class="fa-regular fa-trash-can"></i></a></td>
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
       
 