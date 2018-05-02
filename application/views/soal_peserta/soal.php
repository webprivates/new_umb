<div class="content-wrapper">
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box box-warning box-solid">
    
                    <div class="box-header">
                        <h3 class="box-title">KELOLA DATA SOAL</h3>
                    </div>

                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-12">
                                <?php $no = 1; foreach($soal as $soal) : ?>
                                    
                                    <?php echo $no++ .'.'. $soal->pertanyaan ?><br>
                                    <div class="form-group">
                                        <div class="radio">
                                         <input type="radio" name="jawaban[$no]" value="<?php echo $soal->pilihan_a ?> " ><?php echo $soal->pilihan_a ?><br>
                                         <input type="radio" name="jawaban[$no]" value="<?php echo $soal->pilihan_b ?> " ><?php echo $soal->pilihan_a ?><br>
                                         <input type="radio" name="jawaban[$no]" value="<?php echo $soal->pilihan_c ?> " ><?php echo $soal->pilihan_a ?><br>
                                         <input type="radio" name="jawaban[$no]" value="<?php echo $soal->pilihan_d ?> " ><?php echo $soal->pilihan_a ?><br>
                                        </div>
                                    </div>
                                    <hr>
                                    
                                <?php endforeach ?>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </section>
</div>