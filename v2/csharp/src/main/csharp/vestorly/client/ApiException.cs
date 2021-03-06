using System;

namespace vestorly.client {

  public class ApiException : Exception {

    public int ErrorCode { get; set; }

    public ApiException() {}

    public ApiException(int errorCode, string message) : base(message) {
      this.ErrorCode = errorCode;
    }

  }

}
