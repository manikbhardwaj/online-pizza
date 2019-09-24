import Noty from 'noty';

  export const success = (message) => {
    (new Noty({
      text: message,
      type: "success",
      layout: "topRight",
      theme: "relax",
      timeout: 2000
    })).show()
  };

  export const errormsg = (message) => {
    (new Noty({
      text: message,
      type: "error",
      layout: "bottomRight",
      theme: "sunset",
      timeout: 2000
    })).show()
  };

  export const alert = (message) => {
    (new Noty({
      text: message,
      type: "warning",
      timeout: 2000
    })).show()
  };




