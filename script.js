import http from 'k6/http';

import { sleep } from 'k6';

export const options = {

    vus: 5,

    duration: '10s',

};

export default function () {

    http.get('http://127.0.0.1:8000/guru');

    sleep(1);

}