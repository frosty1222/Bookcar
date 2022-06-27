<?php
function public_url($url = '')
{
    return base_url('public/', $url);
}
?>
<?php
function public_base($url = '')
{
    return base_url('', $url);
}
?>