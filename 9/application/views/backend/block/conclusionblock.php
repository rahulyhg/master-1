<section class="panel">
    <div class="panel-body">
        <ul id="nav-mobile">
            <li><a class="waves-effect waves-light <?php if ($this->uri->segment(2) == 'editEvents') {
    echo 'active';
} ?>" href="<?php echo site_url('site/editconclusion?id=').$before1; ?>">Conclusion Details</a></li>
            <li><a class="waves-effect waves-light <?php if ($this->uri->segment(2) == 'viewEventVideo' || $this->uri->segment(2) == 'createEventVideo' || $this->uri->segment(2) == 'editEventVideo') {
    echo 'active';
} ?>" href="<?php echo site_url('site/viewconclusionquestion?id=').$before2; ?>">Questions</a></li>

        </ul>
    </div>
</section>
