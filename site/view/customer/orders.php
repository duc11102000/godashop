<?php require 'layout/header.php' ?>
<main id="maincontent" class="page-main">
    <div class="container">
        <div class="row">
            <div class="col-xs-9">
                <ol class="breadcrumb">
                    <li><a href="/" target="_self">Trang chủ</a></li>
                    <li><span>/</span></li>
                    <li class="active"><span>Tài khoản</span></li>
                </ol>
            </div>
            <div class="clearfix"></div>
            <aside class="col-md-3">
                <div class="inner-aside">
                    <div class="category">
                        <ul>
                            <li>
                                <a href="thong-tin-tai-khoan.html" title="Thông tin tài khoản" target="_self">Thông tin
                                    tài khoản
                                </a>
                            </li>
                            <li>
                                <a href="dia-chi-giao-hang-mac-dinh.html" title="Địa chỉ giao hàng mặc định"
                                    target="_self">Địa chỉ giao hàng mặc định
                                </a>
                            </li>
                            <li class="active">
                                <a href="don-hang-cua-toi.html" target="_self">Đơn hàng của tôi
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </aside>
            <div class="col-md-9 order">
                <div class="row">
                    <div class="col-xs-6">
                        <h4 class="home-title">Đơn hàng của tôi</h4>
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-md-12">
                        <?php foreach($orders as $order): ?>
                        <!-- Mỗi đơn hàng -->
                        <div class="row">
                            <div class="col-md-12">
                                <h5>Đơn hàng <a href="?c=customer&a=orderDetail&id=<?=$order->getId()?>">#<?=$order->getId()?></a></h5>
                                <span class="date">
                                    Đặt hàng ngày <?=$order->getCreatedDate()?> </span>
                                <hr>
                                <?php foreach ($order->getOrderItems() as $orderItem): 
                                    $product = $orderItem->getProduct();
                                    ?>
                                <div class="row">
                                    <div class="col-md-2">
                                        <img src="../upload/<?=$product->getFeaturedImage()?>" alt="" class="img-responsive">
                                    </div>
                                    <div class="col-md-3">
                                        <a class="product-name" href="?c=product&a=show&id=<?=$product->getId()?>"><?=$product->getName()?></a>
                                    </div>
                                    <div class="col-md-2">
                                        Số lượng: <?=$orderItem->getQty()?>
                                    </div>
                                    <div class="col-md-2">
                                        <?=$order->getStatus()->getDescription()?>
                                    </div>
                                    <div class="col-md-3">
                                        Giao hàng ngày <?=$order->getDeliveredDate()?>
                                    </div>
                                </div>
                                <?php endforeach ?>
                            </div>
                        </div>
                        <?php endforeach ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<?php require 'layout/footer.php' ?>