#!/bin/bash

function writelog()
{

    logfile="/usr/local/webserver/contab-srcipt/log_test_java_jar"

    output="Connect Socket Fails；Reload jar progre"

    echo "`date +'%Y-%m-%d %H:%M:%S'`: $output" >> $logfile
}

#执行访问socket端口  有等待时间
exec 8>/dev/tcp/120.79.88.167/55534
#若返回不为0 则失败
if [ $?=0 ];then

    kill -9 `ps -ef | grep jar | grep -v grep | awk '{print $2}'`

    writeLog

    #执行重启命令
    #code...
fi

#连接成功 执行写入测试
echo -e "status" >&8

if [ $?!=0 ];then

    #写入不成功创建

    kill -9 `ps -ef | grep jar | grep -v grep | awk '{print $2}'`

    logfile="/usr/local/webserver/contab-srcipt/log_test_java_jar"

    output="Write Socket error；Reload jar progre"

    echo "`date +'%Y-%m-%d %H:%M:%S'`: ${output}" >> $logfile

    #执行重启命令
    #code

fi

exec 8>&-