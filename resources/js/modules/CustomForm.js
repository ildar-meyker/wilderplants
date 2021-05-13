import $ from 'jquery';
import 'icheck';

const CustomForm = {

    init() {
        $('input').iCheck({
            checkboxClass: 'icheckbox_minimal-grey',
            radioClass: 'iradio_minimal-grey'
        });
    }
};

export default CustomForm;

