<?php
$folderPath = 'lesson12';
$filePath = $folderPath . '/data.txt';

if (file_exists($filePath)) {
    echo "File tồn tại.";
} else {
    echo "File không tồn tại.";
}
//Kiểm tra file có cho phép ghi không
if(is_writable('data.txt'))
    echo 'Được phép ghi';
else
    echo 'không được phép ghi';

    if ($file) {
        // Ghi nội dung vào file
        fwrite($file, 'Xin chào');

        // Đóng file
        fclose($file);

        echo "Ghi file thành công.";

        // unlink($filePath);
    } else {
        echo "Lỗi: Không thể mở file.";
    }
}
?>

