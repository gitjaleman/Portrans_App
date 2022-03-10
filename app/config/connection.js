const dir_data_local = "http://localhost/server/portrans_api/api/";
const dir_file_local = "http://localhost/server/portrans_api/file/";
const dir_data_server = "https://gestioncobranza.com/api/api/";
const dir_file_server = "https://gestioncobranza.com/api/file/";

const http_data = dir_data_local;
const http_file = dir_file_local;

const FETCH_GET = async (url,get_process) => {
  try {
    const resp = await fetch(http_data+url);
    const data = await resp.json();
    await PROCESS_GET(data,get_process);
  } catch (e) {
    console.log('Error: '+get_process+ ' - msj:'+e);
  }
};

const FETCH_POST = async (url,post_process,formData) => {
  try {
    const resp = await fetch(http_data+url, {
      method: 'POST',
      body: formData
    });
    const data = await resp.json();
    await PROCESS_POST(data,post_process);
  } catch (e) {
    console.log("no hay resultados:" + e);
  }
};