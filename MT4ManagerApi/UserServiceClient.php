<?php
// GENERATED CODE -- DO NOT EDIT!

// Original file comments:
// Options:
// Date: 2020-07-13 03:06:20
// Version: 0.01
// Tip: To override a DTO option, remove "//" prefix before updating
// BaseUrl: https://localhost:8841
// GlobalNamespace:
// AddDescriptionAsComments: True
//
namespace MT4ManagerApi;

/**
 */
class UserServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \MT4ManagerApi\UserInfoRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetInfo(\MT4ManagerApi\UserInfoRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/api_pb.UserService/GetInfo',
        $argument,
        ['\MT4ManagerApi\UserInfoResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \MT4ManagerApi\DeleteUserRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function Delete(\MT4ManagerApi\DeleteUserRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/api_pb.UserService/Delete',
        $argument,
        ['\MT4ManagerApi\DeleteUserResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \MT4ManagerApi\AddUserRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function Add(\MT4ManagerApi\AddUserRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/api_pb.UserService/Add',
        $argument,
        ['\MT4ManagerApi\AddUserResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \MT4ManagerApi\UpdateUserRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function Update(\MT4ManagerApi\UpdateUserRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/api_pb.UserService/Update',
        $argument,
        ['\MT4ManagerApi\UpdateUserResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \MT4ManagerApi\FundsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function Withdraw(\MT4ManagerApi\FundsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/api_pb.UserService/Withdraw',
        $argument,
        ['\MT4ManagerApi\FundsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \MT4ManagerApi\FundsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function Deposit(\MT4ManagerApi\FundsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/api_pb.UserService/Deposit',
        $argument,
        ['\MT4ManagerApi\FundsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \MT4ManagerApi\ResetPasswordRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function ResetPassword(\MT4ManagerApi\ResetPasswordRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/api_pb.UserService/ResetPassword',
        $argument,
        ['\MT4ManagerApi\ResetPasswordResponse', 'decode'],
        $metadata, $options);
    }

}
