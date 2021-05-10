import $ from 'jquery';
import 'icheck';

const CustomForm = {

    init() {

        $(function () {

            $('input').iCheck({
                checkboxClass: 'icheckbox_minimal-grey',
                radioClass: 'iradio_minimal-grey'
            });
            
        });
    }
};

export default CustomForm;

