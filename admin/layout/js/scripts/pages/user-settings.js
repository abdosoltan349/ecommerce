/*=========================================================================================
    File Name: user-settings.js
    Description: User Settings jQuery Plugin Intialization
    --------------------------------------------------------------------------------------
    Item Name: Vuexy  - Vuejs, HTML & Laravel Admin Dashboard Template
    Author: Error 404
    Author URL: http://www.themeforest.net/user/Error 404
==========================================================================================*/

// profile picture upload
Dropzone.options.profilePicUpload = {
  paramName: "file", // The name that will be used to transfer the file
  maxFiles: 1,
  init: function () {
    this.on("maxfilesexceeded", function (file) {
      this.removeAllFiles();
      this.addFile(file);
    });
  }
};
