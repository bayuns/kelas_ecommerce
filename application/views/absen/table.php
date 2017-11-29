<table class="table">
            <tr>
                <th>#</th>
                <th>NIM</th>
                <th>SEMESTER</th>
                <th>TANGGAL</th>
                <th>ABSEN</th>
            </tr>
            <?php
                $count = 1;
                foreach ($rows as $row) {
                    echo '
                            <tr>
                                <td>'.$count.'</td>
                                <td>'.$row->nim.'</td>
                                <td>'.$row->id_semester.'</td>
                                <td>'.$row->tanggal.'</td>
                                <td>'.$row->absen.'</td>
                            </tr>'
                        ;
                    $count++;
                }
                ?>
</table>