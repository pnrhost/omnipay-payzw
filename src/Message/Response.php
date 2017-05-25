<?php
/**
 * Omnipay\Payzw\Message\Response.php
 * 
 * This is the response class for all Gateway requests.
 * 
 * @category Class
 * @package  Omnipay\Payzw
 * @author   pnrhost <privyreza@gmail.com>
 * @license  http://www.gnu.org/copyleft/gpl.html GNU General Public License
 * @link     http://github.com/pnrhost/omnipay-payzw
 * @see      \Omnipay\Payzw\Gateway
 */
namespace Omnipay\Payzw\Message;

use Omnipay\Common\Message\AbstractResponse;
/**
 * Transaction Response
 * 
 * This is the response class for all Gateway requests.
 * 
 * @category Class
 * @package  Omnipay\Payzw
 * @author   pnrhost <privyreza@gmail.com>
 * @license  http://www.gnu.org/copyleft/gpl.html GNU General Public License
 * @link     http://github.com/pnrhost/omnipay-payzw
 * @see      \Omnipay\Payzw\Gateway
 */
class Response extends AbstractResponse
{
    /**
     * Is transaction successful
     * 
     * @return boolean
     */
    public function isSuccessful()
    {
        return isset($this->data['success']) && $this->data['success'];
    }
    
    /**
     * Gateway Reference
     *
     * @return null|string A reference provided by the gateway
     *  to represent this transaction
     */
    public function getTransactionReference()
    {
        return isset($this->data['reference']) ? $this->data['reference'] : null;
    }
    
    /**
     * Response Message
     *
     * @return null|string A response message from the payment gateway
     */
    public function getMessage()
    {
        return isset($this->data['message']) ? $this->data['message'] : null;
    }
}
