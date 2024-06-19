import { App, Button, Space } from 'antd';
const MyPage = () => {
  const { message, modal, notification } = App.useApp();
  const showMessage = () => {
    message.success('Success!');
  };
  return (
    <Space wrap>
      <Button type="primary" onClick={showMessage}>
        Open message
      </Button>
      <Button type="primary" onClick={showModal}>
        Open modal
      </Button>
      <Button type="primary" onClick={showNotification}>
        Open notification
      </Button>
    </Space>
  );
};
