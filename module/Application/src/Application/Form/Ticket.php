<?php
/*
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS
 * "AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT
 * LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR
 * A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT
 * OWNER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL,
 * SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT
 * LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE,
 * DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY
 * THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT
 * (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE
 * OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
 *
 * This software consists of voluntary contributions made by many individuals
 * and is licensed under the MIT license.
 */

namespace Application\Form;

use Zend\Form\Form;

class Ticket extends Form
{
    public function __construct($name = null, $options = [])
    {
        parent::__construct($name, $options);

        $this->setAttribute('method', 'post');

        $this->add([
            'name' => 'id',
            'attributes' => [
                'type' => 'hidden'
            ],
        ]);

        $this->add([
            'name' => 'subject',
            'options' => [
                'type' => 'text',
                'label' => 'Subject',
            ],
            'attributes' => [
                'id' => 'subject',
                'placeholder' => 'Subject',
            ],
        ]);

        $this->add([
            'name' => 'description',
            'type' => 'textarea',
            'options' => [
                'label' => 'Description',
            ],
            'attributes' => [
                'id' => 'description',
                'placeholder' => 'Description',
            ],
        ]);

        $this->add([
            'name' => 'importance',
            'type' => 'select',
            'options' => [
                'label' => 'Importance',
                'value_options' => [
                    1 => 'Low',
                    2 => 'Medium',
                    3 => 'High',
                    4 => 'Emergency',
                ]
            ],
            'attributes' => [
                'id' => 'importance',
            ],
        ]);

        $this->add([
            'name' => 'opened_by',
            'type' => 'hidden',
        ]);

        $this->add([
            'name' => 'status',
            'type' => 'select',
            'options' => [
                'label' => 'Status',
            ],
            'attributes' => [
                'id' => 'status',
            ]
        ]);

        $this->add([
            'name' => 'responsible',
            'type' => 'hidden',
            'attributes' => [
                'id' => 'responsible',
            ]
        ]);

        $this->add([
            'name' => 'submit',
            'options' => [
                'type' => 'submit',
            ],
            'attributes' => [
                'value' => 'Open Ticket',
                'class' => 'btn btn-success',
            ]
        ]);
    }
}