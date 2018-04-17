<?php
/*
Title: Thông tin dự án
Post Type: sanpham
*/

/**
 * Tạo box nhập giá tiền
 * https://piklist.com/learn/doc/text/
 */
piklist('field', array(
    'type' => 'text',
    'field' => 'sanpham_price',
    'label' => 'Giá dự án',
    'description' => 'Nhập giá của dự án này',
    'help' => 'Nhập số và giá trị này sẽ hiển thị ra bên ngoài website như sau: 25 triệu/m2',
    'attributes' => array(
        'class' => 'sanpham_price text'
    )
));

/**
 * Tạo box nhập diện tích
 * https://piklist.com/learn/doc/text/
 */
piklist('field', array(
    'type' => 'text',
    'field' => 'sanpham_dientich',
    'label' => 'Diện tích',
    'description' => 'Nhập diện tích của dự án này',
    'help' => 'Nhập số và giá trị này sẽ hiển thị ra bên ngoài website như sau: 25 m2',
    'attributes' => array(
        'class' => 'sanpham_dientich text'
    )
));

/**
 * Tạo box nhập số phòng ngủ
 * https://piklist.com/learn/doc/text/
 */
piklist('field', array(
    'type' => 'text',
    'field' => 'sanpham_phongngu',
    'label' => 'Số Phòng ngủ',
    'description' => 'Nhập phòng ngủ của dự án này',
    'help' => 'Nhập số và giá trị này sẽ hiển thị ra bên ngoài website',
    'attributes' => array(
        'class' => 'sanpham_phongngu text'
    )
));

/**
 * Tạo box nhập số phòng ăn
 * https://piklist.com/learn/doc/text/
 */
piklist('field', array(
    'type' => 'text',
    'field' => 'sanpham_phongan',
    'label' => 'Số Phòng ăn',
    'description' => 'Nhập phòng ăn của dự án này',
    'help' => 'Nhập số và giá trị này sẽ hiển thị ra bên ngoài website',
    'attributes' => array(
        'class' => 'sanpham_phongan text'
    )
));

/**
 * Tạo box nhập số phòng tắm
 * https://piklist.com/learn/doc/text/
 */
piklist('field', array(
    'type' => 'text',
    'field' => 'sanpham_phongtam',
    'label' => 'Số Phòng tắm',
    'description' => 'Nhập phòng tắm của dự án này',
    'help' => 'Nhập số và giá trị này sẽ hiển thị ra bên ngoài website',
    'attributes' => array(
        'class' => 'sanpham_phongtam text'
    )
));

/**
 * Tạo box địa chỉ
 * https://piklist.com/learn/doc/text/
 */
piklist('field',array(
    'type'=>'textarea',
    'label' => 'Địa chỉ',
    'description' => 'Nhập thông tin địa chỉ dự án',
    'help' => 'Địa chỉ cách nhau bằng dấu phẩy (,) vd: Số 1,Phạm Văn Bạch,Yên Hòa,Cầu Giấy,Hà Nội',
    'field'=>'sanpham_diachi',
    'attributes' => array(
        'rows' => 5,
        'cols' => 50,
        'class' => 'sanpham_diachi text'
    )
));

?>
