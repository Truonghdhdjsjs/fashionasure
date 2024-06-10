
             <section id="catology_lv2">
                <header class="catology_lv2_header">
                    <a href="../admin/index.html">Bảng điều khiển</a>
                    /
                    <a href="../admin/categorylv2..html">Danh mục cấp 2</a>
                </header>
                <nav class="catology_lv2_header_nav">
                    <form action="" method="post">
                        <div class="catology_lv2_tool">
                            <div class="catology_lv2_tool_plus">
                                <a href="">
                                    <i class="fa-solid fa-plus"></i>
                                    <span>Thêm mới</span>
                                </a>
                            </div>
                            <div class="catology_lv2_tool_delete">
                                <a href="">
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
                                 <option value="Chọn danh mục" selected>Chọn danh mục</option>
                                 <option value="Quần kaki">Quần kaki</option>
                                 <option value="Áo thun">Áo thun</option>
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
                               <tr>
                                    <td></td>
                                    <td>sss</td>
                                    <td><span>Nước lau nhà mới</span></td>
                                    <td><input type="checkbox" name="txtdisplay" id="txtdisplay"></td>
                                    <td><input type="checkbox" name="txtoutstanding" id="txtoutstanding"></td>
                                    <td><a href="" class="edit"><i class="fa-solid fa-pen-to-square"></i></a>|<a href="" class="trash"><i class="fa-solid fa-trash-can"></i></a></td>
                               </tr>
                            </table>
                        </div>
                    </form>
                </nav>
             </section>
        </div>